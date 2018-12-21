<div class="c-ifc">
    <div class="c-ifc__wrapper">
        <div class="c-ifc__wrapper-text">
            <h1 class="c-ifc__headline">IFC</h1>
            <h3 class="c-ifc__description">Octo U Customization for a Canadian Insurance Company</h3>
            <p class="c-ifc__headline--small">Challenge</p>
            <p class="c-ifc__text">
            Our client’s client - the largest provider of property and casualty insurance in Canada - wanted to introduce Usage-based insurance solution relying on smartphone apps to their existing software ecosystem.
            <br /><br />
            Our challenge was to handle much heavier load in the system, provide production support and quickly react to issues and failures.
            </p>
            <p class="c-ifc__headline--small">Solution</p>
            <p class="c-ifc__text">
            As the core platform is built on top of a horizontally scalable NoSQL database, we were able to easily adjust the systems capacity in accordance with the increasing traffic. We have also designed the required infrastructure setup necessary to support the expected volume of data.
            <br /><br />
            The system is deployed on over 20 nodes with total of 300 CPU, so we had to introduce a centralized log analysis mechanism. We have implemented it using Elasticsearch and Kibana.
            We have utilized this mechanism to identify and eliminate several performance bottlenecks in the system. 
            </p>
        </div>
        <div class="c-ifc__sidebar">
            <div class="c-ifc__img" data-img style="background-image: url('<?php echo get_template_directory_uri() ?>/public/images/ifc-photo.jpg')"></div>
            <p class="c-ifc__headline--small">Tools used:</p>
            <p class="c-ifc__headline-tools-describe">Core system:</p>
            <ul class="c-ifc__wrapper-tools">
                <li class="c-ifc__tools-item">Java 8, Spring</li>
                <li class="c-ifc__tools-item">ActiveMQ</li>
                <li class="c-ifc__tools-item">MySQL</li>
                <li class="c-ifc__tools-item">Cassandra</li>
            </ul>
            <p class="c-ifc__headline-tools-describe">Monitoring:</p>
            <ul class="c-ifc__wrapper-tools">
                <li class="c-ifc__tools-item">Elasticsearch</li>
                <li class="c-ifc__tools-item">Kibana</li>
            </ul>
            <p class="c-ifc__headline--small">June 2016 - December 2016, currently in maintenance.</p>
        </div>
    </div>
</div>