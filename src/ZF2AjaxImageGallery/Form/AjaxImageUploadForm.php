<?php

/**
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

namespace ZF2AjaxImageGallery\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilterProviderInterface;

/**
 * @author  Stanimir Dimitrov <stanimirdim92@gmail.com>
 */
class AjaxImageUploadForm extends Form implements InputFilterProviderInterface
{
    public function __construct()
    {
        parent::__construct('upload');
    }

    public function init()
    {
        $this->setAttribute('action', '/zf2-ajax-image-gallery/index/upload');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'imageUpload',
            'type' => 'File',
            'attributes' => array(
                'class' => 'imgupload',
                'id' => 'imgajax',
                'multiple' => true,
            ),
        ));
    }

    public function getInputFilterSpecification()
    {
        return array(
            array(
                'name' => 'imageUpload',
                'required' => false,
            ),
        );
    }
}
