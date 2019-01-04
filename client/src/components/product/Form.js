import React, { Component } from 'react';
import { Field, reduxForm } from 'redux-form';
import PropTypes from 'prop-types';

class Form extends Component {
  static propTypes = {
    handleSubmit: PropTypes.func.isRequired,
    error: PropTypes.string
  };

  renderField = data => {
    data.input.className = 'form-control';

    const isInvalid = data.meta.touched && !!data.meta.error;
    if (isInvalid) {
      data.input.className += ' is-invalid';
      data.input['aria-invalid'] = true;
    }

    if (this.props.error && data.meta.touched && !data.meta.error) {
      data.input.className += ' is-valid';
    }

    return (
      <div className={`form-group`}>
        <label
          htmlFor={`product_${data.input.name}`}
          className="form-control-label"
        >
          {data.input.name}
        </label>
        <input
          {...data.input}
          type={data.type}
          step={data.step}
          required={data.required}
          placeholder={data.placeholder}
          id={`product_${data.input.name}`}
        />
        {isInvalid && <div className="invalid-feedback">{data.meta.error}</div>}
      </div>
    );
  };

  render() {
    return (
      <form onSubmit={this.props.handleSubmit}>
        <Field
          component={this.renderField}
          name="category"
          type="text"
          placeholder=""
        />
        <Field
          component={this.renderField}
          name="brand"
          type="text"
          placeholder=""
        />
        <Field
          component={this.renderField}
          name="need"
          type="text"
          placeholder=""
        />
        <Field
          component={this.renderField}
          name="price"
          type="number"
          placeholder=""
        />
        <Field
          component={this.renderField}
          name="energyClass"
          type="text"
          placeholder=""
        />
        <Field
          component={this.renderField}
          name="ges"
          type="text"
          placeholder=""
        />
        <Field
          component={this.renderField}
          name="batteryMovable"
          type="checkbox"
          placeholder=""
        />
        <Field
          component={this.renderField}
          name="batteryRecyclability"
          type="number"
          placeholder=""
        />
        <Field
          component={this.renderField}
          name="screenSize"
          type="number"
          placeholder=""
        />
        <Field
          component={this.renderField}
          name="shutDownAuto"
          type="checkbox"
          placeholder=""
        />
        <Field
          component={this.renderField}
          name="autonomy"
          type="number"
          placeholder=""
        />
        <Field
          component={this.renderField}
          name="description"
          type="text"
          placeholder=""
        />
        <Field
          component={this.renderField}
          name="image"
          type="text"
          placeholder=""
        />
        <Field
          component={this.renderField}
          name="model"
          type="text"
          placeholder=""
        />
        <Field
          component={this.renderField}
          name="ecologyNotice"
          type="text"
          placeholder=""
        />

        <button type="submit" className="btn btn-success">
          Submit
        </button>
      </form>
    );
  }
}

export default reduxForm({
  form: 'product',
  enableReinitialize: true,
  keepDirtyOnReinitialize: true
})(Form);
