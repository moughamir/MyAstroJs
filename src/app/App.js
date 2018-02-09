import React from 'react';
import AwesomeComponent from './components/AwesomeComponent.jsx';
import { Container, Divider } from 'semantic-ui-react';
class App extends React.Component {

  render() {
    return (
      <div>
      <Container as='div' fluid>
      <Divider />
        <Container a='section'>
          <AwesomeComponent />
        </Container>
      </Container>
      </div>);
  }

}

export default App;
