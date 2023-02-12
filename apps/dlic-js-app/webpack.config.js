var path = require('path');

module.exports = {
  // dynamically set the env to prod or dev
  mode: process.env.NODE_ENV !== 'production' ? 'development' : 'production',
  // file/s I want to run webpack on
  entry: {
    index: './src/wpComponent.js'
  },
  output: {
    path: path.resolve(__dirname, 'build'),
    filename: 'jsappembed.js', // name = index from the entry
    library: 'jsappembed', // package name
    libraryTarget: 'umd' // use umd to make it work within react, other values 'commonjs' and 'amd', 
  },
  // allow tree shaking
  optimization: {
    providedExports: true,
    usedExports: true,
  },
  // loader
  module: {
    rules: [
    {
				test: /\.ts(x?)$/,
				exclude: [
					/node_modules/,
				],
				loader: 'ts-loader'
			},
      {
        test: /\.js$/, // find all js
        include: path.resolve(__dirname, 'src'),
        exclude: [
          path.resolve(__dirname, 'node_modules'),
          path.resolve(__dirname, 'bower_components'),
          path.resolve(__dirname, 'build')
        ],
        use: {
          loader: 'babel-loader', // run all js through babel-loader
          options: {
            // turns es6 and react to browser friendly js
            presets: ['@babel/preset-env', '@babel/preset-react'],
            // can also include plugins like below
            plugins: [
              ["@babel/plugin-transform-runtime"]
            ]
          }
        }
      },
       {
        test: /\.(png|svg|jpg|jpeg|gif|wav)$/i,
        type: 'asset/resource',

      },
      {
        // turn any imported css in your package to css in js 
        test: /\.css$/i, 
        use: ['style-loader', 'css-loader'],
      },
      {
        test: /\.s[ac]ss$/i,
        use: [
          // Creates `style` nodes from JS strings
          "style-loader",
          // Translates CSS into CommonJS
          "css-loader",
        ],
      },
    ]
  },
  // don't include these packages in the production build, the host project should/must 
  // have the packages already
  // in package.json add them to your peerDependencies and devDependencies
};