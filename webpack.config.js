const path = require('path');

module.exports = {
  resolve: {
    alias: {
      assets: path.resolve(process.cwd(), 'assets'),
      src: path.resolve(process.cwd(), 'src'),
    },
  },
  entry: {
    theme: path.resolve(process.cwd(), 'src', 'theme.js'),
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env'],
          },
        },
      },
    ],
  },
};
