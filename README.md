# Documentation

This plugin designed specifically to assist the team document this Craft project during each phase. During the projects phases, your developers should use a simple markdown file to create end user documentation, this encourages the "document during development" mentality. 

The final result of this working markdown file will be available in Craft for the clients quick reference.

<hr>

# Workflow

This section covers a "typical" workflow while using this plugin.

1. The development team will install the plugin.
2. As the developers are integrating the design, they should add quick notes `on how to add 'x'` for each section.
3. Since database syncing between environments is still a thing, you should check the `working` markdown file in with version control.
4. Enter the path to the markdown file under the [plugin settings](settings/plugins/documentation), this should be in the documentation plugins directory (*i.e 'plugins/documentation/markdown/projectname.md'*).
  
<hr>

# Preparing for production

This section covers how to move the documentation into production.

1. Proof read the working markdown file for accuracy and any bugs (after all, projects change during development).
2. Copy the content of the markdown file, make sure you copy the markdown itself not the HTML. 
3. Enter the contents into the "Documentation Markdown" field in [plugin settings](settings/plugins/documentation).
4. Turn on the setting to "Use The Database".