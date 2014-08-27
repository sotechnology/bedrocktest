

set :application, 'bedrocktest'
set :repo_url, 'git@github.com:sotechnology/bedrocktest.git'

############################################
# Setup WordPress
############################################

set :wp_user, "sotechnology" # The admin username
set :wp_email, "steven.oddy@sotechnology.co.uk" # The admin email address
set :wp_sitename, "WP Deploy Test" # The site title
set :wp_localurl, "http://wpdeploy.dev" # Your local environment URL

# Branch options
# Prompts for the branch name (defaults to current branch)
#ask :branch, -> { `git rev-parse --abbrev-ref HEAD`.chomp }

# Hardcodes branch to always be master
# This could be overridden in a stage config file
set :branch, :master
set :deploy_to, -> { "/home/#{fetch(:application)}/public_html/deploy" }
set :log_level, :info


# Apache users with .htaccess files:
# it needs to be added to linked_files so it persists across deploys:
# set :linked_files, %w{.env web/.htaccess}
set :linked_files, %w{.env}
set :linked_dirs, %w{web/app/uploads}

namespace :deploy do
  desc 'Restart application'
  task :restart do
    on roles(:app), in: :sequence, wait: 5 do
      # Your restart mechanism here, for example:
      # execute :service, :nginx, :reload
    end
  end

  task :compile_assets do
    run_locally do
      within fetch(:local_theme_path) do
        execute :grunt, :build
      end
    end
  end

  task :copy_assets do
    invoke 'deploy:compile_assets'

    on roles(:web) do
      #upload! fetch(:local_theme_path).join('dist'), release_path.join(fetch(:theme_path)), recursive: true
    end
  end
end
# The above restart task is not run by default
# Uncomment the following line to run it on deploys if needed
# after 'deploy:publishing', 'deploy:restart'
