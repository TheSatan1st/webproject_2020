WebP Express 0.19.0. Conversion triggered using bulk conversion, 2021-03-07 18:37:32

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.12
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2021/03/Screenshot_4-1024x513.jpg
- destination: [doc-root]/wp-content/uploads/2021/03/Screenshot_4-1024x513.jpg.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- default-quality: 70
- encoding: "auto"
- max-quality: 100
- metadata: "all"
- near-lossless: 60
- quality: "auto"
------------


*Trying: graphicsmagick* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2021/03/Screenshot_4-1024x513.jpg
- destination: [doc-root]/wp-content/uploads/2021/03/Screenshot_4-1024x513.jpg.webp
- default-quality: 70
- encoding: "auto"
- log-call-arguments: true
- max-quality: 100
- metadata: "all"
- quality: "auto"
- use-nice: true

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- low-memory: false
- method: 6
- skip: false

The following options were supplied but are ignored because they are not supported by this converter:
- near-lossless
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Version: GraphicsMagick 1.3.29 2018-04-29 Q16 
Quality set to same as source: 82
using nice
Executing command: nice gm convert -quality '82' -define webp:lossless=false -define webp:alpha-quality=85 -define webp:method=6 '[doc-root]/wp-content/uploads/2021/03/Screenshot_4-1024x513.jpg' 'webp:[doc-root]/wp-content/uploads/2021/03/Screenshot_4-1024x513.jpg.webp.lossy.webp' 2>&1
success
Reduction: 54% (went from 36 kb to 16 kb)

Converting to lossless
Version: GraphicsMagick 1.3.29 2018-04-29 Q16 
using nice
Executing command: nice gm convert -quality '82' -define webp:lossless=true -define webp:alpha-quality=85 -define webp:method=6 '[doc-root]/wp-content/uploads/2021/03/Screenshot_4-1024x513.jpg' 'webp:[doc-root]/wp-content/uploads/2021/03/Screenshot_4-1024x513.jpg.webp.lossless.webp' 2>&1
success
Reduction: -349% (went from 36 kb to 160 kb)

Picking lossy
graphicsmagick succeeded :)

Converted image in 2384 ms, reducing file size with 54% (went from 36 kb to 16 kb)
