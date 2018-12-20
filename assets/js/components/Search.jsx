import React, { Component } from 'react';
import './HomeInputs.scss';
import { Input, Button, Form } from 'reactstrap';
import { withRouter } from 'react-router';
import queryString from 'query-string';

const imgSrc = 'medias/hero-image.png';

class HomeInputs extends Component {
  constructor(props) {
    super(props);
    this.state = {
      keyword: '',
      personcapacity: 0,
    };
    this.onChange = this.onChange.bind(this);
  }

  onChange(e) {
    this.setState({
      [e.target.name]: e.target.value,
    });
  }

  pageResult() {
    const { history } = this.props;
    const query = queryString.stringify(this.state);
    history.push(`/result?${query}`);
  }

  render() {
    const { keyword } = this.state;
    return (
      <div className="HomeInputs">
        <Form onSubmit={() => this.pageResult()}>
          <div
            className="background"
            style={{ backgroundImage: `url(${imgSrc})`, height: '34vw' }}
          >
            <h2 className="border-text banner-text">
              La Technologie Sobre à portée de MAIN
            </h2>

            <Input
              className="search1"
              placeholder="Restaurant"
              style={{ width: '25vw' }}
              value={keyword}
              onChange={this.onChange}
              name="keyword"
            />
            <Button className="search-button btn-submit">Rechercher</Button>
          </div>
        </Form>
      </div>
    );
  }
}

export default withRouter(HomeInputs);