WebP Express 0.19.0. Conversion triggered using bulk conversion, 2021-03-15 12:11:32

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.12
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2021/03/Рекламная-выставка-инсталляция-LLumar--150x150.jpeg
- destination: [doc-root]/wp-content/uploads/2021/03/Рекламная-выставка-инсталляция-LLumar--150x150.jpeg.webp
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
- source: [doc-root]/wp-content/uploads/2021/03/Рекламная-выставка-инсталляция-LLumar--150x150.jpeg
- destination: [doc-root]/wp-content/uploads/2021/03/Рекламная-выставка-инсталляция-LLumar--150x150.jpeg.webp
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
Quality of source could not be established (Imagick or GraphicsMagick is required) - Using default instead (70).
using nice
Executing command: nice gm convert -quality '70' -define webp:lossless=false -define webp:alpha-quality=85 -define webp:method=6 '[doc-root]/wp-content/uploads/2021/03/---LLumar--150x150.jpeg' 'webp:[doc-root]/wp-content/uploads/2021/03/---LLumar--150x150.jpeg.webp' 2>&1

*Output:* 
gm convert: Unable to open file ([doc-root]/wp-content/uploads/2021/03/---LLumar--150x150.jpeg) [No such file or directory].

return code: 1
command:nice gm convert -quality '70' -define webp:lossless=false -define webp:alpha-quality=85 -define webp:method=6 '[doc-root]/wp-content/uploads/2021/03/---LLumar--150x150.jpeg' 'webp:[doc-root]/wp-content/uploads/2021/03/---LLumar--150x150.jpeg.webp' 2>&1
return code:1
output:gm convert: Unable to open file ([doc-root]/wp-content/uploads/2021/03/---LLumar--150x150.jpeg) [No such file or directory].

**Error: ** **The exec call failed** 
The exec call failed
graphicsmagick failed in 51 ms

*Trying: gd* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2021/03/Рекламная-выставка-инсталляция-LLumar--150x150.jpeg
- destination: [doc-root]/wp-content/uploads/2021/03/Рекламная-выставка-инсталляция-LLumar--150x150.jpeg.webp
- default-quality: 70
- log-call-arguments: true
- max-quality: 100
- quality: "auto"

The following options have not been explicitly set, so using the following defaults:
- skip: false

The following options were supplied but are ignored because they are not supported by this converter:
- encoding
- metadata
- skip-pngs
------------

GD Version: bundled (2.1.0 compatible)
image is true color
Quality of source could not be established (Imagick or GraphicsMagick is required) - Using default instead (70).
gd succeeded :)

Converted image in 78 ms, reducing file size with 39% (went from 8340 bytes to 5098 bytes)
