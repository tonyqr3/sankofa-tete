# Sankofa Tete — initial PHP website

A responsive green-and-white homepage built with PHP, embedded HTML, CSS and JavaScript. No build step, database, CDN, framework, or internet connection is required to render the page.

## Run locally

1. Extract the `sankofa-tete` folder into MAMP's `htdocs` (macOS) or XAMPP's `htdocs`.
2. Start Apache.
3. Open `http://localhost/sankofa-tete/` (MAMP commonly uses `http://localhost:8888/sankofa-tete/`).

Alternatively, with PHP installed, run `php -S localhost:8000` inside the extracted folder, then open `http://localhost:8000`.

Use PHP 7.4 or newer; PHP 8.2+ is recommended. There is no database setup.

## Files

- `index.php`: page markup, PHP settings/content, embedded styles and JavaScript.
- `assets/images/logo-original.png`: supplied original logo.
- `assets/images/botanical-hero.png`: generated botanical concept image.
- `assets/videos/`: add your hero video here.

## Configure the centre

Edit `$clinic` at the top of `index.php`. Add the confirmed phone, WhatsApp, email, address and opening hours. WhatsApp must contain international digits only (no plus sign or spaces). Contact options appear automatically when configured. Empty options remain hidden.

The consultation panel opens, but does not create appointments or store enquiries. Once configured it links to WhatsApp, telephone or email; confirmation is handled directly by the clinic.

Text is initial draft copy. Confirm actual services, practitioner qualifications, registration details and clinic history before adding them. No practitioner names, clinical outcomes, testimonials or accreditation claims have been invented.

## Add the hero video

Place an MP4 named `hero.mp4` at `assets/videos/hero.mp4`. PHP detects the file and adds the video automatically. Use a short silent H.264 MP4 (ideally 10–20 seconds and under 5 MB). A botanical poster remains visible while the video loads or if playback is unavailable. The site includes a background-motion pause button and respects the visitor's reduced-motion setting.

No video is included in this initial package. The current hero uses a gently animated still image.

## Animation and branding

The leaf/capsule SVG is a code-drawn approximation of the supplied logo, with animated ring, leaves and capsule fill in the first-visit loader. The original supplied logo is retained. This is not a certified exact vector tracing. The loader lasts approximately one second on the first visit and is skipped on subsequent visits in the same tab session. A CSS fail-safe prevents it from obstructing the page if JavaScript fails. The page also includes scroll reveals and hover effects.

## Validation

A temporary static rendering was visually checked in Chromium, and the consultation dialog was opened and closed successfully. PHP is not installed in the build environment, so PHP runtime/lint checks were not performed. Test `php -l index.php` and run the PHP page in MAMP/XAMPP before deploying. Video playback and configured contact destinations require checking after actual assets/details are added. Mobile breakpoints are included; device testing remains to be completed.

## Hero asset provenance

Generated with the built-in image-generation tool as a concept background, not a photograph of the clinic or a verified medicinal plant. Prompt: editorial macro photograph of fresh green botanical leaves with fine veins, dewdrops, soft daylight and shallow depth of field; leaves concentrated on the right, dark forest-green negative space on the left; no text, logos, symbols or people. Replace with approved clinic footage when available.
