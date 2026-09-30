const sharp = require('sharp');
const fs = require('fs');
const path = require('path');

const DIR = path.join(__dirname, 'public', 'assets');

// file -> { w: maxWidth }. JPEGs re-encode as mozjpeg q74; PNGs as palette q80.
const jobs = {
  'design-create-wear.jpg': { w: 700 },
  'sell-fashion-products.jpg': { w: 700 },
  'used-fashion.jpg': { w: 700 },
  'swap.jpg': { w: 700 },
  'swap-2.jpg': { w: 700 },
  'buy-donate-charity.jpg': { w: 700 },
  'wireframe-4.png': { w: 820 },
  'wireframe-2.png': { w: 820 },
  'fashion-designers.png': { w: 820 },
  'app-features.png': { w: 820 },
  'app-screen.png': { w: 640 },
  'logo-footer.png': { w: 300 },
};

(async () => {
  let before = 0, after = 0;
  for (const [name, cfg] of Object.entries(jobs)) {
    const p = path.join(DIR, name);
    if (!fs.existsSync(p)) { console.log(`skip (missing): ${name}`); continue; }
    const src = fs.readFileSync(p);
    const b0 = src.length;
    const ext = path.extname(name).toLowerCase();
    let img = sharp(src).resize({ width: cfg.w, withoutEnlargement: true });
    if (ext === '.jpg' || ext === '.jpeg') img = img.jpeg({ quality: 74, mozjpeg: true });
    else if (ext === '.png') img = img.png({ quality: 80, compressionLevel: 9, palette: true });
    const buf = await img.toBuffer();
    const meta = await sharp(buf).metadata();
    fs.writeFileSync(p, buf);
    before += b0; after += buf.length;
    console.log(`${name.padEnd(28)} ${(b0/1024).toFixed(0).padStart(5)}KB -> ${(buf.length/1024).toFixed(0).padStart(4)}KB  (${meta.width}x${meta.height})`);
  }
  console.log(`\nTOTAL: ${(before/1024).toFixed(0)}KB -> ${(after/1024).toFixed(0)}KB  (saved ${((before-after)/1024).toFixed(0)}KB, ${(100*(before-after)/before).toFixed(0)}%)`);
})();
