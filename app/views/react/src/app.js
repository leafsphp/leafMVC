import React, { Component, Fragment } from "react";
import { render } from "react-dom";

/* variable from reactExample.vein */
import user from "user";

class Myapp extends Component {
	render() {
    	const { logged } = user;

		return (
			<Fragment>
				<div className="dashboard">
					{logged ? (
						<div>
							<h2 className="status">Logged In</h2>
							<p>Leaf PHP + React JS</p>
							<p>API host variable {__API_HOST__} {'<<'} this variable is from webpack config</p>
							<p>To use variables from Leaf, you can pass them through webpack config and import them using <b>import var from "key in webpack conf"</b></p>
						</div>
					) : (
						<h2>User not logged in</h2>
					)}
				</div>
			</Fragment>
		);
	}
}

render(<Myapp />, document.getElementById("app"));
