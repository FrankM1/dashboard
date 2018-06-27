import React from 'react';
import PropTypes from 'prop-types';

const Site = ({ site, name }) => {
  let expanded = null;
  // if ( true === site.expanded ) {
  /* expanded = (
    <div className="vvv_site_expanded subpanel">
      <p><small>template: {site.repo.replace('https://github.com/', '').replace('.git', '')}</small></p>
      <p>
        <button title="WIP:Coming soon" className="button" disabled>Disable</button>
        <button title="WIP:Coming soon" className="button" disabled>Delete</button>
      </p>{expanded}
    </div>
  ); */
  // }
  let visitButton = null;
  if (site.hosts.length > 0) {
    const sites = site.hosts.map(host => (
      <a key={`vvv_site_link_${host}`} className="vvv_site_link" href={`http://${host}`}>
        {host}
      </a>
    ));
    visitButton = <p>{sites}</p>;
  }
  let provisioned = null;
  let active = 'active';
  if (site.skip_provisioning) {
    active = 'deactivated';
    provisioned = <a target="_blank" href="https://varyingvagrantvagrants.org/docs/en-US/vvv-config/#skip_provisioning"><small className="site_badge">site disabled</small></a>;
  }
  return (
    <div className={ `box site ${active}` }>
      <h3>{name} {provisioned}</h3>
      <p>{site.description}</p>
      {visitButton}
      
    </div>
  );
};
Site.propTypes = {
  name: PropTypes.string,
  site: PropTypes.shape({
    repo: PropTypes.string,
    description: PropTypes.string,
    skip_provision: PropTypes.bool,
    hosts: PropTypes.arrayOf(PropTypes.string),
  }),
};
Site.defaultProps = {
  site: {},
};
export default Site;