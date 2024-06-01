// frontend/src/components/CreateDog.js
import React, { useState } from 'react';
import axios from 'axios';

const CreateDog = () => {
  // State for form fields
  const [formData, setFormData] = useState({
    name: '',
    breed: '',
    age: '',
    description: '',
    price: '',
    location: '',
    image: null,
  });

  // Handle form input changes
  const handleChange = (e) => {
    const { name, value } = e.target;
    setFormData({ ...formData, [name]: value });
  };

  // Handle form submission
  const handleSubmit = async (e) => {
    e.preventDefault();
    const token = localStorage.getItem('token');
    const config = {
      headers: {
        Authorization: token,
        'Content-Type': 'multipart/form-data',
      },
    };
    const formDataWithFile = new FormData();
    for (const key in formData) {
      formDataWithFile.append(key, formData[key]);
    }
    try {
      const response = await axios.post('/api/dogs', formDataWithFile, config);
      console.log(response.data);
      // Handle success, e.g., redirect to dashboard
    } catch (error) {
      console.error('Error creating dog listing:', error);
    }
  };

  return (
    <form onSubmit={handleSubmit}>
      {/* Input fields for dog listing */}
    </form>
  );
};

export default CreateDog;

