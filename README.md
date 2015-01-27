## PennlineSkeleton
provides a skeleton framework for developing a php application with the [PennlineFramework][1].


### setting up a project
1. create a directory for the project
   * `mkdir /path/to/your/project`

1. clone the repo into that directory with as little history as possible
   * `git clone --depth 1 https://github.com/dan-nl/PennlineSkeleton.git /path/to/your/project`
   * `cd /path/to/your/project`

1. remove the github remote
   * `git remote remove origin`

1. initialise and update the submodules
   * `git submodule update --init --recursive`

1. setup the webserver configuration
   * `cp www/.htaccess.sample www/.htaccess`
   * or alter the webserver configuration accordingly

1. setup the site configuation
   * `cp config/application.config.sample.php config/application.config.php`
   * alter/add configuration settings as needed

1. add a git remote if desired
   * create a remote project; e.g. on github
   * `git remote add github git@github.com:<your-github-username>/<github-project-name>.git`
   * `git push -u github master`

[1]: https://github.com/dan-nl/PennlineFramework
