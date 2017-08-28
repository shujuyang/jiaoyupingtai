var mypath = require('path')
module.exports = {
    entry: './vue/app.js',
    output: {
        path: mypath.join(__dirname,'./dist'),
        filename: 'hebing.js'
    },
    module: {
        // 不知是可以打包 css，还可以打包less
        // 也可以处理sass，或者 *.vue ，图片，或者字体
        rules: [
            test: /\.css$/,
            loader: ['style-loader','css-loader']
        ]
    }
}