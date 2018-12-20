import React from 'react';
import { Link } from 'react-router-dom';
import { Row, Col, Container } from 'reactstrap';
import './Footer.scss';

const Footer = () => (
  <Container className="Footer" fluid>
    <Row className="mb-0 d-flex justify-content-around left">
      <Col className="mb-0" lg={{ offset: 1, size: 3 }}>
        <li>
          <Link to="/index/contact">Contact Client</Link>
        </li>
        <li>
          <Link to="/index/politique">Politique de confidentialité</Link>
        </li>
      </Col>
      <Col className="mb-0">
        <li>
          <Link to="/index/concept">Concept</Link>
        </li>
        <li>
          <Link to="/index/partenaires">Partenaires</Link>
        </li>
      </Col>
      {/* <Col className="mb-0">
        <a
          href="https://www.facebook.com/WildCodeSchool"
          target="_blank"
          rel="noopener noreferrer"
        >
          <i className="fa fa-facebook-square fa-3x social fb" />
        </a>
        <a
          href="https://www.instagram.com/WildCodeSchool/"
          target="_blank"
          rel="noopener noreferrer"
        >
          <i className="fa fa-instagram fa-3x social insta" />
        </a>
      </Col> */}
    </Row>
  </Container>
);

export default Footer;
