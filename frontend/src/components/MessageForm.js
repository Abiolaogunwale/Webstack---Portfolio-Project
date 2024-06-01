// frontend/src/components/MessageForm.js
import React, { useState } from 'react';
import axios from 'axios';

const MessageForm = ({ recipientId }) => {
  const [content, setContent] = useState('');

  const handleSubmit = async (e) => {
    e.preventDefault();
    try {
      const response = await axios.post('/api/messages', { recipientId, content });
      console.log(response.data);
      // Handle success, e.g., show confirmation message
      setContent('');
    } catch (error) {
      console.error('Error sending message:', error);
    }
  };

  return (
    <form onSubmit={handleSubmit}>
      <textarea value={content} onChange={(e) => setContent(e.target.value)} placeholder="Type your message here" />
      <button type="submit">Send</button>
    </form>
  );
};

export default MessageForm;

