// backend/routes/admin.js
const express = require('express');
const { getUsers, getDogs } = require('../controllers/adminController');
const auth = require('../middleware/auth');
const admin = require('../middleware/admin');
const router = express.Router();

router.get('/users', [auth, admin], getUsers);
router.get('/dogs', [auth, admin], getDogs);

module.exports = router;

