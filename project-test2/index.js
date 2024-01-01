const express = require('express');
const app = express();
const port = 9000;

app.get('/', (req, res) => {
  // Your XSLT processing logic will go here
   res.send('Hello World!');
});

app.listen(port, () => {
   console.log(`App listening at http://localhost:${port}`);
});
