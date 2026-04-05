const CACHE_NAME = 'gryphalcode-pwa-v1';
const ASSETS_TO_CACHE = [
  '/',
  '/index.php',
  '/assets/css/style.css',
  '/assets/js/main.js',
  '/assets/images/logo/favicon.webp',
  '/assets/images/logo/logo.webp'
];

self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open(CACHE_NAME).then((cache) => cache.addAll(ASSETS_TO_CACHE))
  );
  self.skipWaiting();
});

self.addEventListener('activate', (event) => {
  event.waitUntil(
    caches.keys().then((keys) => Promise.all(keys.filter(k => k !== CACHE_NAME).map(k => caches.delete(k))))
  );
  self.clients.claim();
});

self.addEventListener('fetch', (event) => {
  if (event.request.method !== 'GET') return;
  event.respondWith(
    caches.match(event.request).then((cached) => {
      const networked = fetch(event.request).then((res) => {
        if (res && res.status === 200) {
          const resCopy = res.clone();
          caches.open(CACHE_NAME).then((cache) => cache.put(event.request, resCopy));
        }
        return res;
      }).catch(() => {
        if (event.request.mode === 'navigate') return caches.match('/index.php');
      });
      return cached || networked;
    })
  );
});
