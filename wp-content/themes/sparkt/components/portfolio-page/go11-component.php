<div class="c-go11">
    <div class="c-go11__wrapper">
        <div class="c-go11__wrapper-text">
            <h1 class="c-go11__headline u-detect-to-hide">go11</h1>
            <h3 class="c-go11__description u-detect-to-hide">System for Insurance companies to provide UBI to customers</h3>
            <p class="c-go11__headline--small u-detect-to-hide">Challenge</p>
            <p class="c-go11__text u-detect-to-hide">
            One of the leading Polish insuretech company focused on car insurance approached us with an idea to create a platform that would allow insurance companies to gather data about their customers’ car trips to provide a Usage Based Insurance model using the users smartphones. <br /><br />
            This called for creating a performant system that would be able to analyse driving behaviour of thousands users each day integrating with external systems. Additionally our partners goal was to have an end-to-end solution accessible from a wide range of devices. 
            </p>
            <p class="c-go11__headline--small u-detect-to-hide">Solution</p>
            <p class="c-go11__text u-detect-to-hide">
            We have implemented the platform as a distributed backend system with a robust and scalable API that is used by mobile applications that we also developed. <br /><br />
            The driving behaviour of users is analyzed and scored using data from sensors such as GPS, accelerometer, gyroscope and digital compass enriched by contextual data like current weather conditions, road types and traffic congestion that we access using external providers. The end-user can browse through their driving history and see each trip on a map with hazardous events highlighted to provide feedback. 
            Apart from the mobile applications two web applications were developed for both end-users and insurance operators.  
            </p>
        </div>
        <div class="c-go11__sidebar">
            <div class="c-go11__img u-detect-to-hide" data-img style="background-image: url('<?php echo get_template_directory_uri() ?>/public/images/go11-photo.jpg')"></div>
            <p class="c-go11__headline--small u-detect-to-hide">Tools used:</p>
            <ul class="c-go11__wrapper-tools">
                <li class="c-go11__tools-item u-detect-to-hide">Backend: Java 8, Spring Boot, ActiveMQ, MySQL, Cassandra</li>
            </ul>
            <ul class="c-go11__wrapper-tools">
                <li class="c-go11__tools-item u-detect-to-hide">Web Application: Angular 2</li>
            </ul>
            <ul class="c-go11__wrapper-tools">
                <li class="c-go11__tools-item u-detect-to-hide">Android: Java, Android SDK, Gradle</li>
            </ul>
            <ul class="c-go11__wrapper-tools">
                <li class="c-go11__tools-item u-detect-to-hide">iOS: Swift 4, CocoaPods, PromiseKit</li>
            </ul>
            <ul class="c-go11__wrapper-tools">
                <li class="c-go11__tools-item u-detect-to-hide">Monitoring: 
                Influxdata TICK, Crashlytics, AWS EC2, Jenkins, Ansible, fastlane</li>
            </ul>
            <p class="c-go11__headline--small u-detect-to-hide">June 2017 - still being developed, 
            production launched in December 2017. 
            Currently in beta tests.</p>
        </div>
    </div>
</div>
