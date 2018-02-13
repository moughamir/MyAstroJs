import _ from 'lodash';
import { Component } from 'react';
import { Container, Divider, Grid, Header, Icon, Image, List, Menu, Segment, Visibility, } from 'semantic-ui-react';
import HomeButton from './SvgAssets/home.svg';
const Link = require('react-router-dom').NavLink;

const menuStyle = {
  border: 'none',
  borderRadius: 0,
  boxShadow: 'none',
  marginBottom: '1em',
  marginTop: '4em',
  transition: 'box-shadow 0.5s ease, padding 0.5s ease',
};

const fixedMenuStyle = {
  backgroundColor: '#22424d',
  border: '1px solid #22424d',
  boxShadow: '0px 3px 5px rgba(0, 0, 0, 0.2)',
  color: '#fff'
};

const fixedMenuText = {
  color: '#fff'
};

const overlayStyle = {
  float: 'left',
  margin: '0em 3em 1em 0em',
};

const fixedOverlayStyle = {
  ...overlayStyle,
  position: 'fixed',
  top: '80px',
  zIndex: 10,
};

const overlayMenuStyle = {
  position: 'relative',
  left: 0,
  transition: 'left 0.5s ease',
};

const fixedOverlayMenuStyle = {
  ...overlayMenuStyle,
  left: '800px',
};

export default class AppNavbar extends Component {
  state = {
    menuFixed: false,
    overlayFixed: false,
  }

  handleOverlayRef = (c) => {
    const { overlayRect } = this.state;

    if (!overlayRect) {
      this.setState({ overlayRect: _.pick(c.getBoundingClientRect(), 'height', 'width') });
    }
  }

  stickOverlay = () => this.setState({ overlayFixed: true })
  stickTopMenu = () => this.setState({ menuFixed: true })
  unStickOverlay = () => this.setState({ overlayFixed: false })
  unStickTopMenu = () => this.setState({ menuFixed: false })

  render() {
    const { menuFixed, overlayFixed, overlayRect } = this.state;

    return (
      <Visibility
        onBottomPassed={this.stickTopMenu}
        onButtomVisible={this.unStickTopMenu}
        once={false}
      >
        <Menu borderless
          fixed={menuFixed && 'top'}
          style={menuFixed ? fixedMenuStyle : menuStyle}
        >
          <Container text style={fixedMenuStyle}>
            <Menu.Item as='a' href='/'>
              <Image size='mini' src={HomeButton} />
            </Menu.Item>
          </Container>
        </Menu>
      </Visibility>
    );
  }
}
