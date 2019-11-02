import React, { Component, Fragment } from 'react';
import { render } from 'react-dom';
import { asyncComponent } from 'react-async-component';

/** We are importing our index.php my app Vairaible */
import myApp from 'myApp';

class Myapp extends Component {
	render() {

		const { logged } = myApp;

		return (
			<Fragment>
				<div className="dashboard">
					{logged &&
						<h2 className="status">Logged In</h2>
					}
					Leaf PHP + React JS

					<p>API host variable {__API_HOST__}</p>
				</div>
			</Fragment>
		)
	}
}

render(<Myapp />, document.getElementById('app'));