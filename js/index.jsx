import React from 'react';
import ReactDOM from 'react-dom';
import { createStore } from 'redux';
import { Provider } from 'react-redux';

import vvvSitesApp from './reducers/reducers';
import VisibleSiteList from './components/containers/visible-site-list';
import { InitialState } from './reducers/initial-state';
import { ADD_SITE } from './reducers/actions';

const store = createStore(vvvSitesApp, InitialState);

// import all the sites intothe store from the config via window.vvv_sites
Object.keys(window.vvv_sites).map((k) => {
  const site = window.vvv_sites[k];
  site.name = k;
  store.dispatch({
    type: ADD_SITE,
    site,
  });
});

// off to the races!
ReactDOM.render(
  <Provider store={store}>
    <VisibleSiteList />
  </Provider>,
  document.getElementById('sitelist'),
);
