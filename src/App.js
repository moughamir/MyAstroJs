import React, { Component } from 'react';
import PropTypes from 'prop-types'
//import AwesomeComponent from './components/AwesomeComponent.jsx';
//import { Button, Container, Divider, Grid, Header, Icon, Image, List, Menu, Responsive, Segment, Sidebar, Visibility, } from 'semantic-ui-react'
import { BrowserRouter as Router } from 'react-router-dom';
import Routes from './Routes';
/* eslint-disable react/no-multi-comp */
import Home from './Pages/HomePage';

const App = () => (
    <Home />
);

export default App;
