<?php

/**
 * Plugin Name:     Vue WordPress Plugin
 * Description:     A starting point for using VueJS in WordPress plugins. This is designed to be hacked and changed.
 * Version: 0.0.3
 * License: GPL2+
 * Author: Mat Gargano
 * Author URI: http://matgargano.com
 *
 * This plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with CSSTidy; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 */

use VWP\Enqueues;

require __DIR__ . '/vendor/autoload.php';

$enqueues = new Enqueues();
$enqueues->init();