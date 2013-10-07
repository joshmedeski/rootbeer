description 'Rootbeer Compass Gem'

# Sass Files
stylesheet '../../../zurb-foundation-4.3.1/scss/normalize.scss',             :to => '_normalize.scss'
stylesheet '../../../zurb-foundation-4.3.1/scss/foundation/_variables.scss', :to => '_foundation-settings.scss'
stylesheet '../../scss/rootbeer/_variables.scss',                            :to => '_rootbeer-settings.scss'
stylesheet '../../scss/editor-style.scss',									 :to => 'editor-style.scss'
stylesheet '../../scss/login-style.scss',									 :to => 'login-style.scss'
stylesheet 'scss/app.scss',                                                  :to => 'app.scss', :media => "screen, projector, print"

# Make sure you list all the project template files here in the manifest.
file '404.php'
file 'screenshot.png'
file 'MIT-LICENSE.txt'
file 'footer.php'
file 'header.php'
file 'favicon.ico'
file 'functions.php'
file 'searchform.php'
file 'sidebar.php'
file 'single.php'
file 'style.css'

def copy_js_from(relative_path, prefix_path, excludes=[])
  absolute_path = File.join(File.dirname(__FILE__), relative_path, prefix_path)
  js_files = Dir.glob("#{absolute_path}/*.js")
  js_files.reject! {|f| excludes.include? File.basename(f)}
  js_files.each do |js|
    javascript "#{relative_path}/#{prefix_path}/#{File.basename(js)}",
      :to => "#{prefix_path}/#{File.basename(js)}"
  end
  return js_files.map {|f| "#{prefix_path}/#{File.basename(f)}"}
end

javascripts = copy_js_from("../../../zurb-foundation-4.3.1/js", "foundation", ["foundation.js", "index.js"])
vendor_javascripts = copy_js_from("../../../zurb-foundation-4.3.1/js", "vendor")

javascript "../../../zurb-foundation-4.3.1/js/foundation/foundation.js", :to => "foundation/foundation.js"

help %Q{

If you need help, submit an new issue at https://github.com/joshmedeski/rootbeer/issues"

}

welcome_message %Q{

YAY! You're using ZURB Foundation and Rootbeer for awesome Wordpress theme buildin!

}

# file 'config.rb'

# no_configuration_file!