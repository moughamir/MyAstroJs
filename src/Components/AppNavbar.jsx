import React, { Component } from 'react';
import { Container, Image, Menu, Visibility, } from 'semantic-ui-react';
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

export default class AppNavbar extends Component {
  state = {
    menuFixed: false,
  }


  stickTopMenu = () => this.setState({ menuFixed: true })
  unStickTopMenu = () => this.setState({ menuFixed: false })

  render() {
    const { menuFixed } = this.state;

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
            <Menu.Item>
              <Link to='/'><Image size='mini' src={HomeButton} /></Link>
            </Menu.Item>
            <Menu.Item style={menuFixed ? fixedMenuText : null}><Link to='/Voyance'>Voyance</Link></Menu.Item>
            <Menu.Item style={menuFixed ? fixedMenuText : null}><Link to='/Horoscope'>Horoscope</Link></Menu.Item>
            <Menu.Item style={menuFixed ? fixedMenuText : null}><Link to='/Astrologie'>Astrologie</Link></Menu.Item>
            <Menu.Item style={menuFixed ? fixedMenuText : null}><Link to='/Tarot'>Tarot</Link></Menu.Item>
            <Menu.Item style={menuFixed ? fixedMenuText : null}><Link to='/Numerologie'>Numérologie</Link></Menu.Item>
            <Menu.Item style={menuFixed ? fixedMenuText : null}><Link to='/myastro-tchat'>Tchat</Link></Menu.Item>
          </Container>
        </Menu>
      </Visibility>
    );
  }
}
