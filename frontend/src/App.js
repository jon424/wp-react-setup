import React, { Fragment } from "react";
import Books from "./components/Books";
import BookPage from "./components/BookPage";
import { BrowserRouter as Router, Route, Switch } from "react-router-dom";
import "./App.css";

function App() {
  return (
    <Router>
      <Switch>
        <Fragment>
          <Route exact path="/" component={Books} />
          <Route path="/book/:id" component={BookPage} />
        </Fragment>
      </Switch>
    </Router>
  );
}

export default App;
