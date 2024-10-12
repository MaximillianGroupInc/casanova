// casanova.js

(function() {
    // Check if the current post has the desired group block
    if ( wp.data.select('core/editor').getBlockTypes().find( blockType => 
          blockType.name === 'core/group' &&
          blockType.attributes.className.includes('wp-block-group alignfull has-global-padding is-layout-constrained wp-container-core-group-is-layout-7 wp-block-group-is-layout-constrained has-background')
        ) ) {
  
      // Add a new Media Upload button to the group block
      wp.data.dispatch('core/editor').updateBlockAttributes('core/group', {
        className: 'wp-block-group alignfull has-global-padding is-layout-constrained wp-container-core-group-is-layout-7 wp-block-group-is-layout-constrained has-background', // Add your desired classes 
      });
  
      wp.data.dispatch('core/editor').updateBlockAttributes('core/group', {
        className: 'wp-block-group alignfull has-global-padding is-layout-constrained wp-container-core-group-is-layout-7 wp-block-group-is-layout-constrained has-background', // Add your desired classes 
      });
  
      // Create the button
      const mediaUploadButton = document.createElement('button');
      mediaUploadButton.classList.add('casanova-media-upload');
      mediaUploadButton.textContent = 'Add Video';
  
      // Add the button to the group block's controls area
      const groupBlockControls = document.querySelector('.wp-block-group.wp-container-core-group-is-layout-7 .block-editor-block-list__block');
      groupBlockControls.appendChild(mediaUploadButton);
  
      // Handle click on the button
      mediaUploadButton.addEventListener('click', () => {
        // Open the media library
        wp.media.editor.open({
          title: 'Select Video',
          button: {
            text: 'Use Video'
          },
          multiple: false,
          type: 'video'
        }).on('select', (selection) => {
          // Get the selected video URL
          const videoUrl = selection.first().toJSON().url;
  
          // Add the video element to the group block
          const videoElement = document.createElement('video');
          videoElement.src = videoUrl;
          videoElement.autoplay = true;
          videoElement.muted = true;
          videoElement.loop = true;
  
          // Insert the video element into the group block
          groupBlockControls.appendChild(videoElement);
        });
      });
    }
  })();