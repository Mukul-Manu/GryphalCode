document.addEventListener("DOMContentLoaded", function () {
  const headerPlaceholder = document.getElementById("header-placeholder");
  const footerPlaceholder = document.getElementById("footer-placeholder");
  const scriptsPlaceholder = document.getElementById("scripts-placeholder");

  // Detect directory depth
  // Checks if we are in a subfolder like 'service-details'
  const isSubDir =
    window.location.pathname.includes("/service-details/") ||
    window.location.href.includes("/service-details/") ||
    window.location.pathname.includes("/case-studies/") ||
    window.location.href.includes("/case-studies/");
  const prefix = isSubDir ? ".." : ".";

  // Use relative paths that adapt to the directory level
  const headerPath = `${prefix}/header.html`;
  const footerPath = `${prefix}/footer.html`;
  const scriptsPath = `${prefix}/scripts.html`;
  const whatsappPath = `${prefix}/whatsapp.html`; // ADDED: Shared Whatsapp Widget

  const fetchPromises = [
    fetch(headerPath).then((response) => (response.ok ? response.text() : "")),
    fetch(footerPath).then((response) => (response.ok ? response.text() : "")),
    fetch(scriptsPath).then((response) => (response.ok ? response.text() : "")),
    fetch(whatsappPath).then((response) =>
      response.ok ? response.text() : "",
    ),
  ];

  Promise.all(fetchPromises)
    .then(([headerData, footerData, scriptsData, whatsappData]) => {
      // Fix paths in injected HTML before setting innerHTML
      const fixedHeader = fixPaths(headerData, prefix);
      const fixedFooter = fixPaths(footerData, prefix);
      const fixedScripts = fixPaths(scriptsData, prefix);
      const fixedWhatsapp = fixPaths(whatsappData, prefix);

      if (headerPlaceholder && fixedHeader)
        headerPlaceholder.innerHTML = fixedHeader;
      if (footerPlaceholder && fixedFooter)
        footerPlaceholder.innerHTML = fixedFooter;

      // Inject WhatsApp widget into body
      if (fixedWhatsapp) {
        const whatsappContainer = document.createElement("div");
        whatsappContainer.innerHTML = fixedWhatsapp;
        document.body.appendChild(whatsappContainer);
      }

      if (scriptsPlaceholder && fixedScripts) {
        scriptsPlaceholder.innerHTML = fixedScripts;
        // Execute scripts manually since innerHTML doesn't run <script> tags
        const scripts = scriptsPlaceholder.querySelectorAll("script");
        const loadSequentially = (index) => {
          if (index >= scripts.length) {
            // All library scripts loaded, now load main.js
            loadScript(`${prefix}/assets/js/main.js`);
            return;
          }
          const oldScript = scripts[index];
          const newScript = document.createElement("script");
          Array.from(oldScript.attributes).forEach((attr) =>
            newScript.setAttribute(attr.name, attr.value),
          );

          if (oldScript.src) {
            newScript.onload = () => loadSequentially(index + 1);
            newScript.onerror = () => loadSequentially(index + 1);
            document.head.appendChild(newScript);
          } else {
            newScript.text = oldScript.text;
            document.head.appendChild(newScript);
            loadSequentially(index + 1);
          }
          oldScript.remove(); // Remove the non-executing placeholder script
        };
        loadSequentially(0);
      } else {
        // Fallback if no scripts-placeholder or fetch failed
        loadScript(`${prefix}/assets/js/main.js`);
      }
    })
    .catch((error) => {
      console.error("Error loading layout components:", error);
    });

  function fixPaths(html, prefix) {
    if (!html) return "";
    // Replace absolute-style paths starting with / with the relative prefix
    // Only if they look like internal site links/assets (e.g., /assets, /index.html)
    // Avoid replacing double slashes (external protocols)
    return html.replace(
      /(href|src|data-background)="\/([^/])/g,
      `$1="${prefix}/$2`,
    );
  }

  function loadScript(src) {
    if (document.querySelector(`script[src="${src}"]`)) return;
    const script = document.createElement("script");
    script.src = src;
    script.async = false;
    script.defer = true;
    document.body.appendChild(script);
  }
});
