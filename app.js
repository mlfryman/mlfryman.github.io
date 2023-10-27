var connect = require('connect'),
    serveStatic = require('serve-static'),
    morgan = require('morgan'),
    port = 8000,
    app = connect();

app.use(morgan('dev'));
app.use(serveStatic(__dirname));

app.listen(port);
console.log('Node listening on port ' + port);
