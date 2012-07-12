Vagrant::Config.run do |config|

  # config.vm.box = "lucid32"
  config.vm.box = "precise32"
  config.vm.box_url= "http://files.vagrantup.com/precise32.box"

  # Boot with a GUI so you can see the screen. (Default is headless)
  # config.vm.boot_mode = :gui

  # Assign this VM to a host only network IP, allowing you to access it
  # via the IP.
  config.vm.network :hostonly, "33.33.33.10"
  # config.vm.network :bridged

  # Forward a port from the guest to the host, which allows for outside
  # computers to access the VM, whereas host only networking does not.
  config.vm.forward_port 80, 8080
  config.vm.forward_port 3306, 3306

  config.vm.share_folder("web-app", "/home/vagrant/web-app", "./", :owner => "vagrant")

  config.vm.provision :chef_solo do |chef|
    # This path will be expanded relative to the project directory
    chef.cookbooks_path = ["vagrant/cookbooks", "vagrant"]

    chef.add_recipe("project")
    # Uncomment the recipes you would want this app to use
    # chef.add_recipe("project::mysql")
    # chef.add_recipe("project::rabbitmq")
    chef.json = {
      "xdebug" => {
        "remote_enable" => "1",
        "remote_host" => "33.33.33.1"
      },
      # You can configure the VM with a few custom options.
      # Only modify the options below if the defaults don't suit your needs.
      # "app" => {
      #   Server name used in the apache virtualhost (default is "localhost")
      #   "server_name"        => "localhost",
      #   aliases used in the apache virtualhost (default is ["*.localhost"])
      #   "server_aliases"     => ["*.localhost"]
      #   The docroot in the VM where the app is (default is "/home/vagrant/web-app/httpdocs")
      #   You might want to alter this if you don't keep public files in an httpdocs directory
      #   "docroot"            => ""
      #   The Kohana Environment set in the apache virtualhost (default is "development")
      #   "kohana_environment" => ""
      #   A list of extra packages you need installed on the VM (default is [])
      #   "extra_packages"     => ["php5-xsl", "php5-svn"]
      # }
    }
  end
end