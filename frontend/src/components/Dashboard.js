// frontend/src/components/Dashboard.js
import React, { useEffect, useState } from 'react';
import axios from 'axios';

const Dashboard = () => {
  const [dogs, setDogs] = useState([]);

  useEffect(() => {
    const fetchDogs = async () => {
      try {
        const response = await axios.get('/api/dogs');
        setDogs(response.data);
      } catch (error) {
        console.error('Error fetching dogs:', error);
      }
    };
    fetchDogs();
  }, []);

  return (
    <div>
      <h1>Dashboard</h1>
      {/* Display dog listings */}
    </div>
  );
};

export default Dashboard;

