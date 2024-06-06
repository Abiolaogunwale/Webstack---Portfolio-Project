// backend/controllers/dogController.js
const Dog = require('../models/Dog');

exports.createDog = async (req, res) => {
  const { name, breed, age, description, price, location } = req.body;
  const image = req.file.path;
  try {
    const dog = new Dog({ name, breed, age, description, price, location, image, user: req.user.userId });
    await dog.save();
    res.status(201).send(dog);
  } catch (err) {
    res.status(400).send({ error: err.message });
  }
};

exports.getDogs = async (req, res) => {
  try {
    const dogs = await Dog.find();
    res.send(dogs);
  } catch (err) {
    res.status(500).send({ error: err.message });
  }
};

