root = File.join(File.dirname(__FILE__), "..")
require "rootbeer/version"

module Rootbeer
  # Your code goes here...
end

if defined?(Compass)
  Compass::Frameworks.register("rootbeer",
    :stylesheets_directory => File.join(root,"scss"),
    :templates_directory => File.join(root,"templates")
  )
end