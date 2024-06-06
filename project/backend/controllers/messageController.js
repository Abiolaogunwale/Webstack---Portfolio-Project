// backend/controllers/messageController.js
const Message = require('../models/Message');

exports.sendMessage = async (req, res) => {
  const { recipientId, content } = req.body;
  try {
    const message = new Message({ sender: req.user.userId, recipient: recipientId, content });
    await message.save();
    res.status(201).send(message);
  } catch (err) {
    res.status(400).send({ error: err.message });
  }
};

exports.getMessages = async (req, res) => {
  try {
    const messages = await Message.find({ recipient: req.user.userId });
    res.send(messages);
  } catch (err) {
    res.status(500).send({ error: err.message });
  }
};

