// backend/routes/dogs.js
const express = require('express');
const { createDog, getDogs } = require('../controllers/dogController');
const auth = require('../middleware/auth');
const multer = require('multer');
const upload = multer({ dest: 'uploads/' });
const router = express.Router();

router.post('/', [auth, upload.single('image')], createDog);
router.get('/', getDogs);

module.exports = router;

