WebP Express 0.19.0. Conversion triggered using bulk conversion, 2021-03-11 14:58:36

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.12
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2021/03/Silk-Scarf-Blue-300x300.jpeg
- destination: [doc-root]/wp-content/uploads/2021/03/Silk-Scarf-Blue-300x300.jpeg.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- default-quality: 70
- encoding: "lossy"
- max-quality: 100
- metadata: "all"
- quality: "auto"
------------


*Trying: graphicsmagick* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2021/03/Silk-Scarf-Blue-300x300.jpeg
- destination: [doc-root]/wp-content/uploads/2021/03/Silk-Scarf-Blue-300x300.jpeg.webp
- default-quality: 70
- encoding: "lossy"
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
------------

Version: GraphicsMagick 1.3.29 2018-04-29 Q16 
Quality set to same as source: 82
using nice
Executing command: nice gm convert -quality '82' -define webp:lossless=false -define webp:alpha-quality=85 -define webp:method=6 '[doc-root]/wp-content/uploads/2021/03/Silk-Scarf-Blue-300x300.jpeg' 'webp:[doc-root]/wp-content/uploads/2021/03/Silk-Scarf-Blue-300x300.jpeg.webp' 2>&1
success
graphicsmagick succeeded :)

Converted image in 115 ms, reducing file size with 23% (went from 29 kb to 22 kb)
