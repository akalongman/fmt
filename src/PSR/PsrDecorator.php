<?php
# Copyright (c) 2015, phpfmt and its authors
# All rights reserved.
#
# Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
#
# 1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
#
# 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
#
# 3. Neither the name of the copyright holder nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.
#
# THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

final class PsrDecorator {
	public static function PSR1(CodeFormatter $fmt) {
		$fmt->enablePass('PSR1OpenTags');
		$fmt->enablePass('PSR1BOMMark');
		$fmt->enablePass('PSR1ClassConstants');
	}

	public static function PSR1Naming(CodeFormatter $fmt) {
		$fmt->enablePass('PSR1ClassNames');
		$fmt->enablePass('PSR1MethodNames');
	}

	public static function PSR2(CodeFormatter $fmt) {
		$fmt->enablePass('PSR2KeywordsLowerCase');
		$fmt->enablePass('PSR2IndentWithSpace');
		$fmt->enablePass('PSR2LnAfterNamespace');
		$fmt->enablePass('PSR2CurlyOpenNextLine');
		$fmt->enablePass('PSR2ModifierVisibilityStaticOrder');
		$fmt->enablePass('PSR2SingleEmptyLineAndStripClosingTag');
		$fmt->enablePass('ReindentSwitchBlocks');
	}

	public static function decorate(CodeFormatter $fmt) {
		self::PSR1($fmt);
		self::PSR1Naming($fmt);
		self::PSR2($fmt);
	}
}