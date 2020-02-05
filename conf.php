<?php

/**
 * Content Management System (CMS)
 *
 */
// Set debug mode and log errors
const CMS_DEBUG_MODE = true;
const CMS_DEBUG_LOG = true;

// Should the CMS auto-update?
const CMS_AUTO_UPDATE = false;

// Should the media be fetched from a remote server?
const CMS_FETCH_MEDIA_REMOTELY = true;
// The address of the remote server
// ( exclude the protocol and trailing slash from the URL )
const CMS_REMOTE_ADDRESS = 'project.wip.lazaro.in';

// Database
const CMS_USE_SQLITE = false;
const CMS_DB_NAME = 'bfs';
const CMS_DB_USER = 'root';
const CMS_DB_PASSWORD = 'root';
