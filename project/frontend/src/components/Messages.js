// frontend/src/components/Messages.js
import React, { useEffect, useState } from 'react';
import axios from 'axios';

const Messages = () => {
  const [messages, setMessages] = useState([]);

  useEffect(() => {
    const fetchMessages = async () => {
      try {
        const response = await axios.get('/api/messages');
        setMessages(response.data);
      } catch (error) {
        console.error('Error fetching messages:', error);
      }
    };
    fetchMessages();
  }, []);

  return (
    <div>
      <h2>Messages</h2>
      {messages.map((message) => (
        <div key={message._id}>
          <p>{message.content}</p>
          {/* Display message details */}
        </div>
      ))}
    </div>
  );
};

export default Messages;

