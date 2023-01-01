import './bootstrap';
import React from 'react';
import reactDOM from 'react-dom';
import App from './components/App';

if (document.getElementById('app')) {
    reactDOM.render(<App />,document.getElementById('app'));
}