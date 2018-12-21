<div class="c-octou" data-project>
    <div class="c-octou__wrapper">
        <div class="c-octou__wrapper-text" data-wrapper-text>
            <h1 class="c-octou__headline">OctoU</h1>
            <h3 class="c-octou__description">System for Analyzing Driving Behavior of Users</h3>
            <p class="c-octou__headline--small">Challenge</p>
            <p class="c-octou__text">Our client- Octo Telematics - sought to build a powerful platform to evaluate driving behavior of users based on data collected by mobile applications. They had only a high-level vision of the product with no specific functional requirements and no clear expectations as to number of users or amount of data each user will generate.
            <br /><br />Our challenge was to design and implement horizontally scalable, reliable and fault-tolerant system as well as prepare algorithms for detection of events in raw data and scoring users based on data collected from various sources.
            </p>
            <p class="c-octou__headline--small">Solution</p>
            <p class="c-octou__text">
            Without clear requirements we were forced to first quickly create an MVP and receive customer feedback. After that we were adding new features in iterations between 2 and 4 weeks. The system went live after 1 year of development.
            <br /><br />
            We developed a feature-rich system that allows users to measure their driving skills. The system is based on heterogeneous data, such as real-time GPS data, weather and road conditions, traffic congestion, speed limits and drivers’ lifestyle information.
            <br /><br />
            Each users trip is assigned a score that describes how safely the user was driving. The algorithm detects hazardous events, such as speed limit violations, harsh acceleration, braking, and cornering. 
            The system also contains social features, such as commenting and liking friends’ trips, collecting badges, receiving tips etc. The system is distributed and is deployed on multiple nodes that asynchronously process incoming data. 
            </p>
        </div>
        <div class="c-octou__sidebar">
            <div class="c-octou__img" data-img style="background-image: url('<?php echo get_template_directory_uri() ?>/public/images/octou-photo.png')"></div>
            <p class="c-octou__headline--small">Tools used:</p>
            <p class="c-octou__headline-tools-describe">Core system:</p>
            <ul class="c-octou__wrapper-tools">
                <li class="c-octou__tools-item">Java 8, Spring</li>
                <li class="c-octou__tools-item">ActiveMQ</li>
                <li class="c-octou__tools-item">MySQL</li>
                <li class="c-octou__tools-item">Cassandra</li>
            </ul>
            <p class="c-octou__headline-tools-describe">Web console:</p>
            <ul class="c-octou__wrapper-tools">
                <li class="c-octou__tools-item">Angular 5</li>
                <li class="c-octou__tools-item">TypeScript</li>
            </ul>
            <p class="c-octou__headline--small">June 2014 - still being developed.</p>
        </div>
    </div>
</div>