package "make"

package "python-software-properties"

execute "add-ppa" do
  command "add-apt-repository ppa:nathan-renniewaldock/ppa"
end

#execute "initial-sudo-apt-get-update" do
#  command "apt-get update"
#end

# Making apache run as the vagrant user simplifies things when you ssh in
node.set["apache"]["user"] = "vagrant"
node.set["apache"]["group"] = "vagrant"

require_recipe "apt"

require_recipe "apache2"
require_recipe "apache2::mod_php5"
require_recipe "apache2::mod_rewrite"
require_recipe "apache2::mod_ssl"

require_recipe "php"
require_recipe "php::module_curl"
# require_recipe "php::module_fileinfo"
require_recipe "php::module_gd"
require_recipe "php::module_memcache"
require_recipe "php::module_mysql"
require_recipe "php::module_sqlite3"
require_recipe "project::php_module_mcrypt"
require_recipe "composer"

# install the http pecl
package "libpcre3-dev"
package "libcurl3"
package "php5-dev"
package "libcurl4-gnutls-dev"
package "libmagic-dev"
php_pear "pecl_http" do
  action :install
end

bash "fix-pecl_http_extension" do
  code "echo \"extension=http.so \n\" > /etc/php5/conf.d/pecl_http.ini"
end

# require_recipe "xdebug"

package "git-core"

# These can be defined in the Vagrantfile to install some extra needed packages
node[:app][:extra_packages].each do |extra_package|
  package extra_package
end

# Had some issues with an upload path not being specified so we set one here
file "/etc/php5/apache2/conf.d/upload_path.ini" do
  owner "root"
  group "root"
  content "upload_tmp_dir = /tmp/web-app"
  action :create
end

# Remove the 000-default site
apache_site "000-default" do
  enable false
end

web_app "localhost" do
  server_name node[:app][:server_name]
  server_aliases node[:app][:server_aliases]
  docroot node[:app][:docroot]
  kohana_environment node[:app][:kohana_environment]
end

# Add the vagrant user to the vboxsf group
group "vboxsf" do
  members 'vagrant'
  append true
end

# This fixes a bug in Ubuntu 11.10
file "/etc/php5/conf.d/sqlite.ini" do
  action :delete
end
