import React, { Component } from 'react';
import { Container, Segment, } from 'semantic-ui-react';

export default class Voyance extends Component {

  render() {

    return (
      <div>
        <Segment
        inverted
        style={{ margin: '5em 0em 0em', padding: '5em 0em' }}
        vertical
        >
          <Container textAlign='center'>
            <h2>Voyance</h2>
          </Container>
        </Segment>
      </div>
    );
  }
}
