import React, { Component, Fragment } from 'react';
import { render } from 'react-dom';
import { asyncComponent } from 'react-async-component';

/* variable from reactExample.vein */
import user from 'user';

class Myapp extends Component {
	render() {

		const { logged } = user;

		return (
			<Fragment>
				<div className="dashboard">
					{logged ? (
						<div>
							<h2 className="status">Logged In</h2>
							Leaf PHP + React JS
							<p>API host variable {__API_HOST__}</p>
						</div>
					): (
						<h2>User not logged in</h2>
					)}
				</div>
			</Fragment>
		)
	}
}

render(<Myapp />, document.getElementById('app'));