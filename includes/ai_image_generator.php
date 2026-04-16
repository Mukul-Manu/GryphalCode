<?php
/**
 * AiImageGenerator: Handles FREE AI image generation via Pollinations.ai using cURL.
 */

class AiImageGenerator {
    /**
     * Generate an AI image for a blog post using a FREE provider.
     */
    public static function generate($promptTitle, $slug, $suffix = '') {
        $rawPrompt = "Professional 3D tech illustration of '{$promptTitle}'. Futuristic, glassmorphism, isometric, blue cyan colors, 4k.";
        $encodedPrompt = urlencode($rawPrompt);
        $seed = rand(1000, 9999);
        $imageUrl = "https://image.pollinations.ai/prompt/{$encodedPrompt}?width=1024&height=1024&nologo=true&seed={$seed}";

        $saveDir = __DIR__ . '/../assets/images/blog';
        if (!is_dir($saveDir)) mkdir($saveDir, 0755, true);

        echo "Fetching image for '{$promptTitle}' via cURL...\n";
        
        $ch = curl_init($imageUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36');
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        
        $imgData = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode !== 200 || !$imgData) {
            error_log("Free AI Error: Failed to fetch image (HTTP $httpCode)");
            return false;
        }

        $extension = 'png';
        $filename = "blog_" . $slug . $suffix . "." . $extension;
        $savePath = $saveDir . '/' . $filename;

        // Try WebP conversion if GD is available
        if (function_exists('imagecreatefromstring')) {
            $image = @imagecreatefromstring($imgData);
            if ($image) {
                $webpPath = $saveDir . '/' . "blog_" . $slug . $suffix . ".webp";
                if (imagewebp($image, $webpPath, 80)) {
                    imagedestroy($image);
                    return 'assets/images/blog/' . basename($webpPath);
                }
                imagedestroy($image);
            }
        }

        if (file_put_contents($savePath, $imgData)) {
            return 'assets/images/blog/' . $filename;
        }

        return false;
    }
}
