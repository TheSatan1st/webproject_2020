WebP Express 0.19.0. Conversion triggered using bulk conversion, 2021-01-27 14:28:30

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.12
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2021/01/ahrefs.png
- destination: [doc-root]/wp-content/uploads/2021/01/ahrefs.png.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- alpha-quality: 100
- encoding: "auto"
- metadata: "all"
- near-lossless: 60
- quality: 100
------------


*Trying: graphicsmagick* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2021/01/ahrefs.png
- destination: [doc-root]/wp-content/uploads/2021/01/ahrefs.png.webp
- alpha-quality: 100
- encoding: "auto"
- log-call-arguments: true
- metadata: "all"
- quality: 100
- use-nice: true

The following options have not been explicitly set, so using the following defaults:
- default-quality: 85
- low-memory: false
- max-quality: 85
- method: 6
- skip: false

The following options were supplied but are ignored because they are not supported by this converter:
- near-lossless
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Version: GraphicsMagick 1.3.29 2018-04-29 Q16 
Quality: 100. 
using nice
Executing command: nice gm convert -quality '100' -define webp:lossless=false -define webp:method=6 '[doc-root]/wp-content/uploads/2021/01/ahrefs.png' 'webp:[doc-root]/wp-content/uploads/2021/01/ahrefs.png.webp.lossy.webp' 2>&1
success
Reduction: -110% (went from 1245 bytes to 2614 bytes)

Converting to lossless
Version: GraphicsMagick 1.3.29 2018-04-29 Q16 
using nice
Executing command: nice gm convert -quality '100' -define webp:lossless=true -define webp:method=6 '[doc-root]/wp-content/uploads/2021/01/ahrefs.png' 'webp:[doc-root]/wp-content/uploads/2021/01/ahrefs.png.webp.lossless.webp' 2>&1
success
Reduction: 54% (went from 1245 bytes to 568 bytes)

Picking lossless
graphicsmagick succeeded :)

Converted image in 176 ms, reducing file size with 54% (went from 1245 bytes to 568 bytes)
