# coding: utf-8
lib = File.expand_path('../lib', __FILE__)
$LOAD_PATH.unshift(lib) unless $LOAD_PATH.include?(lib)
require 'rootbeer/version'

Gem::Specification.new do |spec|
  spec.name          = "rootbeer"
  spec.version       = Rootbeer::VERSION
  spec.authors       = ["Josh Medeski"]
  spec.email         = ["josh.medeski@gmail.com"]
  spec.description   = %q{Rootbeer is a Wordpress Framework built with Zurb's Foundation, Compass, and Sass.}
  spec.summary       = %q{A Wordpress Foundation Framework}
  spec.homepage      = "https://github.com/joshmedeski/foundation-rootbeer"
  spec.license       = "MIT"

  spec.files         = `git ls-files`.split($/)
  spec.executables   = spec.files.grep(%r{^bin/}) { |f| File.basename(f) }
  spec.test_files    = spec.files.grep(%r{^(test|spec|features)/})
  spec.require_paths = ["lib"]

  spec.add_development_dependency "bundler", "~> 1.3"
  spec.add_development_dependency "rake"
end
