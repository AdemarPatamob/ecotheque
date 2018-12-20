import React, { Component } from 'react';
import { connect } from 'react-redux';

class Brands extends Component {
  constructor(props) {
    super(props);
    this.state = {  }
  }
  render() { 
const { brands } = this.props;
    return ( 
    <div>
      <h1>Test</h1>
      {brands.map(item => <p>{item}</p>)}
    </div> );
  }
}

function mstp(state) {
  return {
    brands: state.brands,
  }
}
 
export default connect(mstp)(Brands);