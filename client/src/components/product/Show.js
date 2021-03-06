import React, { Component } from 'react';
import { connect } from 'react-redux';
import { Link, Redirect } from 'react-router-dom';
import PropTypes from 'prop-types';
import { retrieve, reset } from '../../actions/product/show';
import { del } from '../../actions/product/delete';

class Show extends Component {
  static propTypes = {
    retrieved: PropTypes.object,
    loading: PropTypes.bool.isRequired,
    error: PropTypes.string,
    eventSource: PropTypes.instanceOf(EventSource),
    retrieve: PropTypes.func.isRequired,
    reset: PropTypes.func.isRequired,
    deleteError: PropTypes.string,
    deleteLoading: PropTypes.bool.isRequired,
    deleted: PropTypes.object,
    del: PropTypes.func.isRequired
  };

  componentDidMount() {
    this.props.retrieve(decodeURIComponent(this.props.match.params.id));
  }

  componentWillUnmount() {
    this.props.reset(this.props.eventSource);
  }

  del = () => {
    if (window.confirm('Are you sure you want to delete this item?'))
      this.props.del(this.props.retrieved);
  };

  render() {
    if (this.props.deleted) return <Redirect to=".." />;

    const item = this.props.retrieved;

    return (
      <div>
        <h1>Show {item && item['@id']}</h1>

        {this.props.loading && (
          <div className="alert alert-info" role="status">
            Loading...
          </div>
        )}
        {this.props.error && (
          <div className="alert alert-danger" role="alert">
            <span className="fa fa-exclamation-triangle" aria-hidden="true" />{' '}
            {this.props.error}
          </div>
        )}
        {this.props.deleteError && (
          <div className="alert alert-danger" role="alert">
            <span className="fa fa-exclamation-triangle" aria-hidden="true" />{' '}
            {this.props.deleteError}
          </div>
        )}

        {item && (
          <table className="table table-responsive table-striped table-hover">
            <thead>
              <tr>
                <th>Field</th>
                <th>Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">category</th>
                <td>{item['category']}</td>
              </tr>
              <tr>
                <th scope="row">brand</th>
                <td>{item['brand']}</td>
              </tr>
              <tr>
                <th scope="row">need</th>
                <td>{item['need']}</td>
              </tr>
              <tr>
                <th scope="row">price</th>
                <td>{item['price']}</td>
              </tr>
              <tr>
                <th scope="row">energyClass</th>
                <td>{item['energyClass']}</td>
              </tr>
              <tr>
                <th scope="row">ges</th>
                <td>{item['ges']}</td>
              </tr>
              <tr>
                <th scope="row">batteryMovable</th>
                <td>{item['batteryMovable']}</td>
              </tr>
              <tr>
                <th scope="row">batteryRecyclability</th>
                <td>{item['batteryRecyclability']}</td>
              </tr>
              <tr>
                <th scope="row">screenSize</th>
                <td>{item['screenSize']}</td>
              </tr>
              <tr>
                <th scope="row">shutDownAuto</th>
                <td>{item['shutDownAuto']}</td>
              </tr>
              <tr>
                <th scope="row">autonomy</th>
                <td>{item['autonomy']}</td>
              </tr>
              <tr>
                <th scope="row">description</th>
                <td>{item['description']}</td>
              </tr>
              <tr>
                <th scope="row">image</th>
                <td>{item['image']}</td>
              </tr>
              <tr>
                <th scope="row">model</th>
                <td>{item['model']}</td>
              </tr>
              <tr>
                <th scope="row">ecologyNotice</th>
                <td>{item['ecologyNotice']}</td>
              </tr>
            </tbody>
          </table>
        )}
        <Link to=".." className="btn btn-primary">
          Back to list
        </Link>
        {item && (
          <Link to={`/products/edit/${encodeURIComponent(item['@id'])}`}>
            <button className="btn btn-warning">Edit</button>
          </Link>
        )}
        <button onClick={this.del} className="btn btn-danger">
          Delete
        </button>
      </div>
    );
  }

  renderLinks = (type, items) => {
    if (Array.isArray(items)) {
      return items.map((item, i) => (
        <div key={i}>{this.renderLinks(type, item)}</div>
      ));
    }

    return (
      <Link to={`../${type}/show/${encodeURIComponent(items)}`}>{items}</Link>
    );
  };
}

const mapStateToProps = state => ({
  retrieved: state.product.show.retrieved,
  error: state.product.show.error,
  loading: state.product.show.loading,
  eventSource: state.product.show.eventSource,
  deleteError: state.product.del.error,
  deleteLoading: state.product.del.loading,
  deleted: state.product.del.deleted
});

const mapDispatchToProps = dispatch => ({
  retrieve: id => dispatch(retrieve(id)),
  del: item => dispatch(del(item)),
  reset: eventSource => dispatch(reset(eventSource))
});

export default connect(
  mapStateToProps,
  mapDispatchToProps
)(Show);
