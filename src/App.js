import React, { Component } from 'react';
//import PropTypes from 'prop-types'
//import AwesomeComponent from './components/AwesomeComponent.jsx';
import { Container, Divider, Header, } from 'semantic-ui-react';
import { BrowserRouter as Router } from 'react-router-dom';
import Routes from './Routes';
import AppNavbar from './Components/AppNavbar.jsx';
import AppFooter from './Components/AppFooter.jsx';
/* eslint-disable react/no-multi-comp */
//import Home from './Pages/HomePage';


export default class App extends Component {
  render() {
    return (
      <div>
        <Router>
          <div>
            <Container text fluid style={{ marginTop: '2em' }}>
              <Header as='h1'>MyAstro</Header>
              <p>Votre voyance MyAstro : découvrez de quoi sera fait demain</p>
            </Container>
            <AppNavbar />
            <main style = { { marginTop: '4rem' } }>
              <Routes />
            </main>
            <Divider />
            <AppFooter />
          </div>
        </Router>

      </div>
    );
  }
}
